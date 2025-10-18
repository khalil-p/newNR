import { useState } from "react";

const Faq = ({ title = "Title", children }) => {
  const [isOpen, setIsOpen] = useState(false);
  const handleOpenAccordion = () => {
    setIsOpen(!isOpen);
  };
  return (
    <div className="w-1/2 bg-yellow-50 m-auto mt-28 tounded">
      <div
        onClick={handleOpenAccordion}
        className=" bg-gray-400 font-bold px-2 py-1 flex justify-between transition-all"
      >
        <span>{title}</span>
        <span className={`${isOpen ? "rotate-180" : ""} outline-none`}>🔽</span>
      </div>
      {isOpen && <div>{children}</div>}
    </div>
  );
};

export default Faq;
