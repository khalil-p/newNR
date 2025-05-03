import React, { useState } from "react";
import ReactDOM from "react-dom/client";
import data from "./data/data.json";
import NavBar from "./components/NavBar";
import RestaurantsCard from "./components/RestaurantCard";
import ButtonUI from "./components/UI/ButtonUI";
import { LuRefreshCcw } from "react-icons/lu";

const App = () => {
  const [resData, setResData] = useState(data);
  const handleTopRatedRes = () => {
    const filteredData = data.filter((res) => {
      return res.info.avgRating > 4;
    });
    setResData(filteredData);
    console.log("filtered top rated restaurants");
  };
  const handleResetRes = () => {
    setResData(data);
  };
  const handleOnSearch = (e) => {
    const searchText = e.target.value.toLowerCase();
    const filteredData = data.filter((item, index) => {
      return (
        item?.info?.name?.toLocaleLowerCase().includes(searchText) ||
        item?.info?.cuisines?.some((cuisine) =>
          cuisine.toLowerCase().includes(searchText)
        )
      );
      // return item?.info?.name?.toLocaleLowerCase().includes(searchText);
    });
    setResData(filteredData);
    console.log({ target: e.target.value });
  };
  return (
    <>
      <NavBar handleOnSearch={handleOnSearch} />
      <div className="flex gap-3 ">
        <ButtonUI
          className=" !text-black ml-5 mt-5 border border-black rounded-lg px-4 py-2"
          text={"Filter Top Rated"}
          onClick={handleTopRatedRes}
        />
        <ButtonUI
          className=" !text-black ml-5 mt-5 border border-black rounded-lg px-4 py-2"
          icon={<LuRefreshCcw />}
          onClick={handleResetRes}
          title="Reset"
        />
      </div>
      <div className="m-[4rem] flex gap-5 flex-wrap justify-center">
        {resData?.map((restaurant) => {
          console.log(restaurant?.info);
          return (
            <RestaurantsCard
              key={restaurant?.info?.id}
              resData={restaurant?.info}
            />
          );
        })}
      </div>
    </>
  );
};

const root = ReactDOM.createRoot(document.getElementById("root"));
root.render(<App />); // Render the JSX element instead of the React.createElement
