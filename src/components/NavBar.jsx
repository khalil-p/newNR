import ButtonUI from "./UI/ButtonUI";
import InputUI from "./UI/InputUI";
import MultiSelectReact from "./UI/MultiSelectReact";
import { LOGO_URL } from "../utils/utils";
import { useState } from "react";
import { Link } from "react-router-dom";
function NavBar() {
  const [isLoggedIn, setIsLoggedIn] = useState(false);
  function handleLogin() {
    setIsLoggedIn((prev) => !prev);
  }

  return (
    <div className=" bg-[#ff5200] ">
      <div className="mx-48 pt-8 pb-8 flex justify-between items-center text-white">
        <Link to="/" className="w-40 ">
          <img src={LOGO_URL} />
        </Link>
        <ul className="flex items-center gap-5 font-[Gilroy-SemiBold]">
          <li>
            <Link to="/aboutus"> About Us</Link>
          </li>
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
          <li>
            <ButtonUI
              type="tertiary"
              text={isLoggedIn ? "Logout" : "Login"}
              className="bg-black py-3 px-6"
              onClick={handleLogin}
            />
          </li>
        </ul>
      </div>
    </div>
  );
}

export default NavBar;
