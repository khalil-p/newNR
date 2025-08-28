import ReactDOM from "react-dom/client";

import NavBar from "./components/NavBar";
import RestaurantsCard from "./components/RestaurantCard";
import ButtonUI from "./components/UI/ButtonUI";
import { LuRefreshCcw } from "react-icons/lu";
import { useAppHook } from "./components/hooks/useAppHook";
import CardShimmerUI from "./components/UI/CardShimmerUI";
import Header from "./components/Header";

const App = () => {
  const { states, handlers } = useAppHook();
  const { resData } = states;
  const { handleOnSearch, handleResetRes, handleTopRatedRes } = handlers;

  return (
    <>
      <NavBar handleOnSearch={handleOnSearch} />
      <Header
        handleTopRatedRes={handleTopRatedRes}
        handleResetRes={handleResetRes}
      />
      <div className="m-[4rem] flex gap-5 flex-wrap justify-center">
        {resData.length === 0 ? (
          <CardShimmerUI />
        ) : (
          resData?.map((restaurant) => {
            console.log(restaurant?.info);
            return (
              <RestaurantsCard
                key={restaurant?.info?.id}
                resData={restaurant?.info}
              />
            );
          })
        )}
      </div>
    </>
  );
};

const root = ReactDOM.createRoot(document.getElementById("root"));
root.render(<App />); // Render the JSX element instead of the React.createElement
