import { useEffect, useState } from "react";

export const useAppHook = () => {
  const [resData, setResData] = useState([]);
  const [filteredData, setFilteredData] = useState([]);
  const handleTopRatedRes = () => {
    const filteredData = resData.filter((res) => {
      return res.info.avgRating > 4;
    });
    setFilteredData(filteredData);
  };

  const handleResetRes = () => {
    setFilteredData(resData);
  };
  const handleOnSearch = (e) => {
    const searchText = e.target.value.toLowerCase();
    const filteredData = resData.filter((item, index) => {
      return (
        item?.info?.name?.toLocaleLowerCase().includes(searchText) ||
        item?.info?.cuisines?.some((cuisine) =>
          cuisine.toLowerCase().includes(searchText)
        )
      );
    });
    setFilteredData(filteredData);
  };

  useEffect(() => {
    fetchData();
  }, []);

  const fetchData = async () => {
    const data = await fetch("https://pastebin.com/raw/0QcdEDBL");

    const json = await data?.data?.cards?.json();

    // setResData(json);
    // setFilteredData(json);
    const newApi = await fetch("https://pastebin.com/raw/0QcdEDBL");
    const newJson = await newApi.json();
    setResData(newJson?.data?.cards);
    setFilteredData(newJson?.data?.cards);

    return json;
  };

  return {
    states: {
      filteredData,
    },
    handlers: {
      handleTopRatedRes,
      handleOnSearch,
      handleResetRes,
    },
  };
};
