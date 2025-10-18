import UserClass from "./UI/UserClass";
import UserClassChild3 from "./UI/UserClassChild3";
import UserFn from "./UI/UserFn";
import React from "react";
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
        <p>Fn Component</p>
        <UserFn name="Khalil Pathan (function)" />
        <p className="mt-5">Class Component</p>
        <UserClass name="Khalil Pathan (class)" location="Mumbai (class)" />
        <UserClassChild3 name="Third Class Component" />
      </div>
    );
  }
}

export default AboutUs;
