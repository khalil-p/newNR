import React from "react";
import { useAppHook } from "./hooks/useAppHook";
import RestaurantsCard from "./RestaurantCard";
import Header from "./Header";
import CardShimmerUI from "./UI/CardShimmerUI";
import MultiSelectReact from "./UI/MultiSelectReact";
import InputUI from "./UI/InputUI";

function MainPage() {
  const { states, handlers } = useAppHook();
  const { filteredData } = states;
  const { handleOnSearch, handleResetRes, handleTopRatedRes } = handlers;
  console.log({filteredData});
  
  return (
    <>
      <div className=" flex flex-col items-center justify-center gap-5 bg-[#ff5200] pt-12">
        <p className="w-1/2 text-center font-[Gilroy-Bold] text-5xl text-white">
          Order food & groceries. Discover best restaurants. Swiggy it
        </p>
        <div className="flex gap-3 justify-center items-start pb-10">
          <div className="w-52">
            <MultiSelectReact height="2.5rem" />
          </div>
          <div className="w-52 relative ">
            <InputUI
              onChange={handleOnSearch}
              className="h-10"
              placeholder="search..."
            />
          </div>
        </div>
      </div>
      <div>
        <Header
          handleTopRatedRes={handleTopRatedRes}
          handleResetRes={handleResetRes}
        />
        <div className="m-[4rem] flex gap-5 flex-wrap justify-center">
          {filteredData.length === 0 ? (
            <CardShimmerUI />
          ) : (
            filteredData?.[1]?.card?.card?.gridElements?.infoWithStyle?.restaurants?.map((restaurant,index) => {
              console.log(restaurant?.card?.card?.id);
              return (
                <RestaurantsCard
                  key={restaurant?.info?.id}
                  resData={restaurant?.info}
                />
              );
            })
          )}
        </div>
      </div>
    </>
  );
}

export default MainPage;
