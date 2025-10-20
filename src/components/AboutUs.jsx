import UserClass from "./UI/UserClass";
import UserClassChild3 from "./UI/UserClassChild3";
import UserFn from "./UI/UserFn";
import React from "react";
import { useContext } from "react";
import { UserContext } from "../utils/UserCotext";
class AboutUs extends React.Component {
  constructor(props) {
    super(props);
  }

  componentDidMount() {
    // console.log("Component Did Mount Parent");
  }
  render() {
    return (
      <div>
        <p>class Component</p>
        <UserContext.Consumer>
          {(data) => {
            console.log({data});
            const {loggedInUser} = data
            return (
              <h1  className="font-bold">Logged In User : {loggedInUser}</h1>
            );
          }}
        </UserContext.Consumer>
        <UserFn name="Khalil Pathan (function)" />
        <p className="mt-5">Class Component</p>
        <UserClass name="Khalil Pathan (class)" location="Mumbai (class)" />
        <UserClassChild3 name="Third Class Component" />
      </div>
    );
  }
}

export default AboutUs;
