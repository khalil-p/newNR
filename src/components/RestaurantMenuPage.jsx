import React, { useEffect, useState } from "react";
import { useParams } from "react-router";
import CardShimmerUI from "./UI/CardShimmerUI";
import { menuApi } from "../constants";
import faqJson from "../data/faqJson.json";
function RestaurantMenuPage() {
  const { resId } = useParams();
  const [resMenuData, setResMenuData] = useState(null);
  const imgUrl = "https://media-assets.swiggy.com/swiggy/";
  const fetchMenu = async () => {
    if (!resId) return;

    // NOTE ::  // Getting CORS Error to fetch the data , SO, Just using a hardcoded (only one restaurant id)
    // const menuData = await fetch(
    //   `${menuApi}${resId}&catalog_qa=undefined&submitAction=ENTER`
    // );
    // const menuData = await fetch(
    //   `https://www.swiggy.com/dapi/menu/pl?page-type=REGULAR_MENU&complete-menu=true&lat=21.99740&lng=79.00110&restaurantId=${resId}&catalog_qa=undefined&submitAction=ENTER`
    // );
    // console.log({ menuData });

    // const json = await menuData?.json();
    // console.log({ json1 });

    const json = faqJson;

    console.log({ json });
    const faqCardsData =
      json?.[0]?.data?.cards?.[4]?.groupedCard?.cardGroupMap?.REGULAR?.cards?.filter(
        (item) =>
          item?.card?.card?.["@type"] ===
          "type.googleapis.com/swiggy.presentation.food.v2.ItemCategory"
      );
    console.log({ faqCardsData });

    setResMenuData(json);
  };
  useEffect(() => {
    fetchMenu();
  }, []);

  console.log({ resMenuData });
  const resItems =
    resMenuData?.data?.cards[4]?.groupedCard?.cardGroupMap?.REGULAR?.cards?.[10]
      ?.card?.card?.itemCards;
  console.log({ resItems });

  const cardInfo = resMenuData?.data?.cards[2]?.card?.card?.info || {};
  return (
    <div className="m-[4rem] flex gap-5 flex-col justify-center items-center">
      {resMenuData ? (
        <div className="w-80 rounded-2xl shadow-md bg-white overflow-hidden hover:shadow-lg transition-all cursor-pointer ">
          {/* Image */}
          <div className="relative">
            <img
              src={`https://media-assets.swiggy.com/swiggy/image/upload/fl_lossy,f_auto,q_auto,w_660/${cardInfo?.cloudinaryImageId}`}
              alt={cardInfo?.name}
              className="w-full h-44 object-cover"
            />
            {/* Discount Badge */}
            {cardInfo?.aggregatedDiscountInfo?.header && (
              <div className="absolute bottom-2 left-2 bg-black bg-opacity-70 text-white px-2 py-1 rounded-md text-sm font-semibold">
                {cardInfo.aggregatedDiscountInfo.header}
              </div>
            )}
          </div>

          {/* Restaurant Info */}
          <div className="p-4">
            <h2 className="text-lg font-bold truncate">{cardInfo?.name}</h2>
            <p className="text-sm text-gray-500 truncate">
              {cardInfo?.cuisines?.join(", ")}
            </p>

            <div className="flex items-center justify-between mt-2 text-sm">
              <span className="flex items-center gap-1 font-medium">
                ⭐ {cardInfo?.avgRating}
              </span>
              <span>{cardInfo?.sla?.lastMileTravelString}</span>
              <span>{cardInfo?.costForTwoMessage}</span>
            </div>
          </div>

          {/* Availability */}
          {!cardInfo?.sla?.serviceability ||
          cardInfo?.sla?.serviceability === "NON_SERVICEABLE" ? (
            <div className="px-4 py-2 text-red-500 font-semibold text-sm border-t">
              {cardInfo?.availabilityServiceabilityMessage}
            </div>
          ) : (
            <div className="px-4 py-2 text-green-600 font-semibold text-sm border-t">
              {cardInfo?.availability?.nextOpenTimeMessage}
            </div>
          )}
        </div>
      ) : (
        <CardShimmerUI />
      )}
      <div className="w-1/2">
        <div>
          <h3 className="font-bold">Recommended {resItems?.length} </h3>
        </div>
        {resItems?.map((item, index) => {
          const itemInfo = item?.card?.info;
          return (
            <div key={itemInfo.name}>
              <p>{itemInfo.name}</p>
            </div>
          );
        })}
      </div>
    </div>
  );
}

export default RestaurantMenuPage;
