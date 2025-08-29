import ReactDOM from "react-dom/client";
import NavBar from "./components/NavBar";
import { createBrowserRouter, RouterProvider, Outlet } from "react-router-dom";
import AboutUs from "./components/AboutUs";
import ErrorPage from "./components/ErrorPage";
import MainPage from "./components/MainPage";
import RestaurantMenuPage from "./components/RestaurantMenuPage";

const App = () => {
  return (
    <>
      {/* <NavBar handleOnSearch={handleOnSearch} /> */}
      <NavBar />
      <Outlet />
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
    ],
    errorElement: <ErrorPage />,
  },
]);

const root = ReactDOM.createRoot(document.getElementById("root"));
root.render(<RouterProvider router={appRouter} />); // Render the JSX element instead of the React.createElement
