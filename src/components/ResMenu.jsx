import { useEffect, useState } from "react";
import { useParams } from "react-router";

import faqJson from "../data/faqJson.json";
import Faq from "./UI/Faq";
function ResMenu() {
  const { resId } = useParams();
  const [resMenuData, setResMenuData] = useState(null);
  const imgUrl = "https://media-assets.swiggy.com/swiggy/";
  const fetchMenu = async () => {
    if (!resId) return;
    const json = faqJson;
    console.log({ json });
    const faqCardsData =
      json?.[0]?.data?.cards?.[4]?.groupedCard?.cardGroupMap?.REGULAR?.cards?.filter(
        (item) =>
          item?.card?.card?.["@type"] ===
          "type.googleapis.com/swiggy.presentation.food.v2.ItemCategory"
      );
    console.log({ faqCardsData });

    setResMenuData(faqCardsData);
  };
  useEffect(() => {
    fetchMenu();
  }, []);
  console.log({ resMenuData });

  return (
    <div>
      {resMenuData?.map((item, idx) => (
        <Faq key={idx} title={item?.card?.card?.title}>
          {item?.card?.card?.itemCards?.map((subItem, index) => {
            return (
              <div key={Number(subItem?.info?.id) + index}>
                <div>{subItem?.info?.isVeg == 1 ? "Veg" : "Non Veg"}</div>
                <h2>{subItem?.info?.name}</h2>
                <p>{subItem?.info?.price}</p>
              </div>
            );
          })}
        </Faq>
      ))}
    </div>
  );
}

export default ResMenu;
