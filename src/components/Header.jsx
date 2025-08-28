import React, { useState } from "react";
import ButtonUI from "./UI/ButtonUI";
import { LuRefreshCcw } from "react-icons/lu";

function Header({ handleTopRatedRes, handleResetRes }) {
  return (
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
  );
}

export default Header;
