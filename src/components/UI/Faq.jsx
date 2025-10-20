import { ChevronUp } from "lucide-react";
import { useState } from "react";

const Faq = ({ item ,isOpen ,handleOpenAccordion,children, }) => {

  return (
    <div className="w-1/2  m-auto rounded">
      <div
        onClick={handleOpenAccordion}
        className=" font-bold  flex justify-between transition-all mb-2"
      >
        <span>{item?.card?.card?.title} ({item?.card?.card?.itemCards.length})</span>
        <span className={`${isOpen ? "rotate-180" : ""} outline-none`}>
          <ChevronUp />
        </span>
      </div>
      {isOpen && <div>{children}</div>}
      <div className="w-full h-5 bg-gray-200"></div>
    </div>
  );
};

export default Faq;
