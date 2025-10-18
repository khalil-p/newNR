import React from "react";

class UserClassChild3 extends React.Component {
  constructor(props) {
    super(props);
    this.state = {
      count3: 0,
      userInfo: {
        UserName: "",
        location: "",
      },
    };
  }

  async componentDidMount() {
    const res = await fetch("https://api.github.com/users/khalil-p");
    const json = await res.json();
    console.log({ json });
    this.setState({
      name: json?.name,
      location: json?.location,
    });
  }
  render() {
    const { name } = this.props;
    const { count3 } = this.state;
    const { UserName, location } = this.state.userInfo;
    const incrementCountFn = () => {
      this.setState({
        count3: this.state.count3 + 1,
      });
    };
    return (
      <div>
        <p>{name}</p>
        <p>Count3 : {count3} </p>
        <p>User Name : {UserName}</p>
        <p>Location : {location}</p>
        <button onClick={incrementCountFn}>Click Me</button>
      </div>
    );
  }
}

export default UserClassChild3;
