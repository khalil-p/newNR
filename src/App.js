import React from "react";
import ReactDOM from "react-dom/client";
import ButtonUI from "./components/UI/ButtonUI";
import MultiSelectReact from "./components/UI/MultiSelectReact";
import InputUI from "./components/UI/InputUI";
import { StarIcon } from "@heroicons/react/16/solid";
const NavBar = () => {
  return (
    <div className=" bg-[#ff5200] ">
      <div className="mx-48 pt-8 pb-20 flex justify-between items-center text-white">
        <a className="w-40 ">
          <img src="https://res.cloudinary.com/dutdah0l9/image/upload/v1720058694/Swiggy_logo_bml6he.png" />
        </a>
        <ul className="flex items-center gap-5 font-[Gilroy-SemiBold]">
          <li>
            <a> Swiggy Corporate</a>
          </li>
          <li>
            <a>Partner with us</a>
          </li>
          <li>
            <ButtonUI
              type="tertiary"
              text={"Get the App"}
              className="border border-white p-3"
            />
          </li>
          <li>
            <ButtonUI
              type="tertiary"
              text={"Sign In"}
              className="bg-black py-3 px-6"
            />
          </li>
        </ul>
      </div>
      <div className=" flex flex-col items-center justify-center gap-5">
        <p className="w-1/2 text-center font-[Gilroy-Bold] text-5xl text-white">
          Order food & groceries. Discover best restaurants. Swiggy it
        </p>
        <div className="flex gap-3 justify-center items-start pb-10">
          <div className="w-52">
            <MultiSelectReact height="2.5rem" />
          </div>
          <div className="w-52 relative ">
            <InputUI className="h-10" placeholder="search..." />
          </div>
        </div>
      </div>
    </div>
  );
};

const RestaurantsCard = () => {
  return (
    <div className="w-60 ">
      <div className="h-52 bg-[url('https://media-assets.swiggy.com/swiggy/image/upload/fl_lossy,f_auto,q_auto/v1684997449/e30f186ad0a74b85bee65f1cb7cb76c9.jpg')]">
        <div className="flex justify-between px-3">
        <p className="font-[Gilroy-Bold] text-white">Pizza Hut</p>
        <div className="font-[Gilroy-Bold] text-white flex"><StarIcon className="size-5"/>4.5</div>
        </div>
      </div>
    </div>
  );
};
const App = () => (
  <>
    <NavBar />
    <RestaurantsCard />
  </>
);

const root = ReactDOM.createRoot(document.getElementById("root"));
root.render(<App />); // Render the JSX element instead of the React.createElement
