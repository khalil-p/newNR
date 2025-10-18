import React from "react";

class UserClass extends React.Component {
  constructor(props) {
    super(props);
    this.state = {
      count: 0,
      count2: 2,
    };
    // this.handleCountNormalFn = this.handleCountNormalFn.bind(this);
    console.log(props);
  }

  conmponentDidMount() {
    // console.log("Child Component Did Mount");
  }

  render() {
    const { name, location } = this.props;
    const { count, count2 } = this.state;
    // function handleCountNormalFn() {
    //   // Never update state variable diretly
    //   this.setState({
    //     count: count + 1,
    //   });
    // }

    const handleCount = () => {
      this.setState({
        count: this.state.count + 1,
      });
    };
    return (
      <div className="p-4 w-max border-gray-300 border-2 m-2 rounded">
        <div className="flex flex-col gap-2 ">
          <h1>Count : {count}</h1>
          <h1>Count2 : {count2}</h1>
          <h2>
            Name : <span className="font-semibold">{name}</span>
          </h2>
          <p>
            Location : <span className="font-semibold">{location}</span>
          </p>
          <p>
            Contact : <span className="font-semibold">pkhalilmk@gmail.com</span>
          </p>
          <button
            // onClick={() => handleCountNormalFn()}
            onClick={handleCount}
          >
            Click Me
          </button>
        </div>
      </div>
    );
  }
}

export default UserClass;
