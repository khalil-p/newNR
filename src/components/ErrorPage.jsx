import React from "react";
import { useRouteError } from "react-router";

const error404 = require("../assets/images/404_page_cover.jpg");

function ErrorPage() {
  const error = useRouteError();
  console.log({ error });

  return (
    <div>
      {error?.status === 404 ? (
        <img src={error404} alt="404 Error" />
      ) : (
        <h1>Oops! Something went wrong</h1>
      )}
    </div>
  );
}

export default ErrorPage;
