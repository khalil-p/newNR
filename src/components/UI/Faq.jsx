import { ChevronUp } from "lucide-react";
import { useState } from "react";

const Faq = ({ title = "Title", children }) => {
  const [isOpen, setIsOpen] = useState(true);
  const handleOpenAccordion = () => {
    setIsOpen(!isOpen);
  };
  return (
    <div className="w-1/2  m-auto rounded">
      <div
        onClick={handleOpenAccordion}
        className=" font-bold  flex justify-between transition-all"
      >
        <span>{title}</span>
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
