import { useEffect, useState } from "react";
import { useParams } from "react-router";

import faqJson from "../data/faqJson.json";
import Faq from "./UI/Faq";
import { SquareDot, StarIcon } from "lucide-react";
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
    <div className="flex flex-col gap-5 my-5">
      {resMenuData?.map((item, idx) => (
        <Faq key={idx} title={item?.card?.card?.title}>
          <div className="flex flex-col gap-4 ">
            {item?.card?.card?.itemCards?.map((subItem, index) => {
              console.log({ subItem });

              return (
                <div
                  key={index}
                  className="border-b border-b-gray-400 pb-2 flex justify-between"
                >
                  <div>
                    <div>
                      {subItem?.card?.info?.isVeg == 1 ? (
                        <SquareDot className="text-green-600 size-4" />
                      ) : (
                        <SquareDot className="text-red-600 size-4" />
                      )}
                    </div>
                    <h2 className="font-semibold">
                      {subItem?.card?.info?.name}
                    </h2>
                    <p className="font-semibold">
                      ₹{subItem?.card?.info?.price}
                    </p>
                    {subItem?.card?.info?.ratings?.aggregatedRating?.rating && (
                      <p className="text-xs  flex gap-1 items-center  my-3">
                        <StarIcon className="text-xs size-3" fill="yellow" />
                        {subItem?.card?.info?.ratings?.aggregatedRating?.rating}

                        {` (${subItem?.card?.info?.ratings?.aggregatedRating?.ratingCountV2})`}
                      </p>
                    )}
                    <p className="text-sm">
                      {subItem?.card?.info?.description}
                    </p>
                  </div>

                  <img
                    src={`https://media-assets.swiggy.com/swiggy/${subItem?.card?.info?.imageId}`}
                    alt="img"
                    className="h-36 w-[156px] rounded-xl ml-4"
                  />
                </div>
              );
            })}
          </div>
        </Faq>
      ))}
    </div>
  );
}

export default ResMenu;
