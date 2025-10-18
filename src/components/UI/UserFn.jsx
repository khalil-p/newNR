import { useState } from "react";

const UserFn = (props) => {
  const [count, setCount] = useState(0);
  const [count2, setCount2] = useState(2);
  const handleCount = () => {
    setCount(count + 1);
  };
  return (
    <div className="p-4 w-max border-gray-300 border-2 m-2 rounded">
      <div className="flex flex-col gap-2 ">
        <h1 className="font-bold">Count : {count}</h1>
        <h1 className="font-bold">Count2 :{count2}</h1>
        <h2>
          Name : <span className="font-semibold">{props.name}</span>
        </h2>
        <p>
          Location : <span className="font-semibold">Mumbai </span>
        </p>
        <p>
          Contact : <span className="font-semibold">pkhalilmk@gmail.com</span>
        </p>
        <button onClick={handleCount}>Click Me</button>
      </div>
    </div>
  );
};

export default UserFn;
