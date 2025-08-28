import { StarIcon } from "@heroicons/react/16/solid";

function RestaurantsCard  ({resData})  {
    const {aggregatedDiscountInfoV3,name,avgRating,cuisines,cloudinaryImageId} = resData
  
    return (
      <div className="w-60">
        <div
          className="h-52 content-end bg-cover bg-center rounded-2xl pb-2 "
          style={{
            backgroundImage: `linear-gradient(rgba(27, 30, 36, 0) 0%, rgb(27, 30, 36) 84.21%), url('https://media-assets.swiggy.com/swiggy/image/upload/fl_lossy,f_auto,q_auto/v1684997449/${cloudinaryImageId}')`,
          }}
        >
          <div className="flex justify-between px-3 ">
            <p className="font-[Gilroy-Bold] text-white">{aggregatedDiscountInfoV3.header} {aggregatedDiscountInfoV3.subHeader}</p>
          </div>
        </div>
        <div className="p-2">
          <div className="flex justify-between">
            <h3 className="font-[Gilroy-Bold]">{name}</h3>
            <div className="font-[Gilroy-Bold] flex">
              <StarIcon className="size-5 " fill="yellow" />
              {avgRating}
            </div>
          </div>
          <p className="font-medium">{cuisines.join(', ')}</p>
        </div>
      </div>
    );
  };
  
  export default RestaurantsCard