import { useEffect, useState } from "react";

export const useAppHook = () => {
  const [resData, setResData] = useState([]);

  const handleTopRatedRes = () => {
    const filteredData = data.filter((res) => {
      return res.info.avgRating > 4;
    });
    setResData(filteredData);
  };

  const handleResetRes = () => {
    setResData(data);
  };
  const handleOnSearch = (e) => {
    const searchText = e.target.value.toLowerCase();
    const filteredData = data.filter((item, index) => {
      return (
        item?.info?.name?.toLocaleLowerCase().includes(searchText) ||
        item?.info?.cuisines?.some((cuisine) =>
          cuisine.toLowerCase().includes(searchText)
        )
      );
    });
    setResData(filteredData);
  };

  useEffect(() => {
    fetchData();
  }, []);

  const fetchData = async () => {
    const data = await fetch(
      "https://mocki.io/v1/2cebe46e-ebb7-4c03-8879-b582b2ee45af"
    );

    const json = await data?.json();
    setResData(json);
    return json;
  };

  return {
    states: {
      resData,
    },
    handlers: {
      handleTopRatedRes,
      handleOnSearch,
      handleResetRes,
    },
  };
};
