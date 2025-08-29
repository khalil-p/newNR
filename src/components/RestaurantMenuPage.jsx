import React, { useEffect, useState } from "react";
import { useParams } from "react-router";
import CardShimmerUI from "./UI/CardShimmerUI";
function RestaurantMenuPage() {
  const { resId } = useParams();
  const [resMenuData, setResMenuData] = useState(null);
  const fetchMenu = async () => {
    if (!resId) return;
    const menuData = await fetch(
      `https://www.swiggy.com/dapi/menu/pl?page-type=REGULAR_MENU&complete-menu=true&lat=19.1760819&lng=73.02288949999999&restaurantId=${resId}&catalog_qa=undefined&submitAction=ENTER`
    );
    const json = await menuData.json();
    setResMenuData(json?.data?.cards[2]?.card?.card?.info);
  };
  useEffect(() => {
    fetchMenu();
  }, []);

  console.log({ resMenuData });

  return (
    <div className="m-[4rem] flex gap-5 flex-wrap justify-center">
   {  resMenuData ?  (<div className="w-80 rounded-2xl shadow-md bg-white overflow-hidden hover:shadow-lg transition-all cursor-pointer ">
        {/* Image */}
        <div className="relative">
          <img
            src={`https://media-assets.swiggy.com/swiggy/image/upload/fl_lossy,f_auto,q_auto/v1684997449/${resMenuData?.cloudinaryImageId}`}
            alt={resMenuData?.name}
            className="w-full h-44 object-cover"
          />
          {/* Discount Badge */}
          {resMenuData?.aggregatedDiscountInfo?.header && (
            <div className="absolute bottom-2 left-2 bg-black bg-opacity-70 text-white px-2 py-1 rounded-md text-sm font-semibold">
              {resMenuData.aggregatedDiscountInfo.header}
            </div>
          )}
        </div>

        {/* Restaurant Info */}
        <div className="p-4">
          <h2 className="text-lg font-bold truncate">{resMenuData?.name}</h2>
          <p className="text-sm text-gray-500 truncate">
            {resMenuData?.cuisines?.join(", ")}
          </p>

          <div className="flex items-center justify-between mt-2 text-sm">
            <span className="flex items-center gap-1 font-medium">
              ⭐ {resMenuData?.avgRating}
            </span>
            <span>{resMenuData?.sla?.lastMileTravelString}</span>
            <span>{resMenuData?.costForTwoMessage}</span>
          </div>
        </div>

        {/* Availability */}
        {!resMenuData?.sla?.serviceability ||
        resMenuData?.sla?.serviceability === "NON_SERVICEABLE" ? (
          <div className="px-4 py-2 text-red-500 font-semibold text-sm border-t">
            {resMenuData?.availabilityServiceabilityMessage}
          </div>
        ) : (
          <div className="px-4 py-2 text-green-600 font-semibold text-sm border-t">
            {resMenuData?.availability?.nextOpenTimeMessage}
          </div>
        )}
      </div>) : (
        <CardShimmerUI />
      )}
    </div>
  );
}

export default RestaurantMenuPage;
