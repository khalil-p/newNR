import ReactDOM from "react-dom/client";
import NavBar from "./components/NavBar";
import { createBrowserRouter, RouterProvider, Outlet } from "react-router-dom";
import AboutUs from "./components/AboutUs";
import ErrorPage from "./components/ErrorPage";
import MainPage from "./components/MainPage";
import RestaurantMenuPage from "./components/RestaurantMenuPage";
import { useOnlineStatus } from "./components/hooks/useOnlineStatus";
import Faq from "./components/UI/Faq";
import ResMenu from "./components/ResMenu";
import { UserContext } from "./utils/UserCotext";
import { useEffect, useState } from "react";
const App = () => {
  const { onlineStatus } = useOnlineStatus();
  const [userData, setUserData] = useState();
  useEffect(() => {
    const data = {
      loggedInUser: "Khalil Pathan",
    };
    setUserData(data);
  }, []);
  return (
    <>
      <UserContext.Provider
        value={{ loggedInUser: userData?.loggedInUser, setUserData }}
      >
        {/* <NavBar handleOnSearch={handleOnSearch} /> */}
        <NavBar onlineStatus={onlineStatus} />
        <Outlet />
      </UserContext.Provider>
    </>
  );
};

const appRouter = createBrowserRouter([
  {
    path: "/",
    element: <App />,
    children: [
      {
        path: "/",
        element: <MainPage />,
      },
      {
        path: "/aboutus",
        element: <AboutUs />,
      },
      {
        path: "/restaurant/:resId",
        element: <RestaurantMenuPage />,
      },
      {
        path: "/resMenu/:resId",
        element: <ResMenu />,
      },
    ],
    errorElement: <ErrorPage />,
  },
]);

const root = ReactDOM.createRoot(document.getElementById("root"));
root.render(<RouterProvider router={appRouter} />); // Render the JSX element instead of the React.createElement
