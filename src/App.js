import React from "react";
import ReactDOM from "react-dom/client";
import resData from "./data/data.json";
import NavBar from "./components/NavBar";
import RestaurantsCard from "./components/RestaurantCard";

const App = () => (
  <>
    <NavBar />
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

const root = ReactDOM.createRoot(document.getElementById("root"));
root.render(<App />); // Render the JSX element instead of the React.createElement
