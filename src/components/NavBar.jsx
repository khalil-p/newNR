import ButtonUI from "./UI/ButtonUI";
import InputUI from "./UI/InputUI";
import MultiSelectReact from "./UI/MultiSelectReact";
import { LOGO_URL } from "../utils/utils";
function NavBar({ handleOnSearch }) {
  return (
    <div className=" bg-[#ff5200] ">
      <div className="mx-48 pt-8 pb-20 flex justify-between items-center text-white">
        <a className="w-40 ">
          <img src={LOGO_URL} />
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
            <InputUI
              onChange={handleOnSearch}
              className="h-10"
              placeholder="search..."
            />
          </div>
        </div>
      </div>
    </div>
  );
}

export default NavBar;
