import React from "react";
import ReactDOM from "react-dom/client";
// const heading = React.createElement("h1", { id: "heading" }, "This is khalil");
// console.log({ heading });

// Element created using JSX:
const headingJsx = <h2 id="heading">This is heading</h2>;
console.log({ headingJsx });

// Functiona component
const Title = () => {
  return <h1 id="heading">This is Title component</h1>;
};
const title = <p>This is JSX Element</p>;
const number = 1000;
const FunctionalComponent = () => (
  <>
    <h2>{number}</h2>
    {title}
    <Title />
    <h1 id="heading">This is functional component</h1>
  </>
);

const root = ReactDOM.createRoot(document.getElementById("root"));
// root.render(headingJsx); // Render the JSX element instead of the React.createElement
root.render(<FunctionalComponent />); // Render the JSX element instead of the React.createElement

// const heading = React.createElement("h1",{id:"heading",key:"heading",xyz:"abc"},"This is a react heading")
// const sibling = React.createElement("p",{id:"sibling",key:"sibling"},"I am sibling")
// const parent = React.createElement("div",{id:"main"},[heading,sibling])
// console.log(parent);
// //OUTPUT : // {
// //     "type": "h1",
// //     "key": null,
// //     "ref": null,
// //     "props": {
// //         "id": "heading",
// //         "xyz": "abc",
// //         "children": "This is a react heading"
// //     },
// //     "_owner": null,
// //     "_store": {}
// // }
// // props are attributes + childrens inside that react element
// const root = ReactDOM.createRoot(document.getElementById("root"))
// root.render(parent)

// // to prevent this complex thing of `React.createElement` we use `JSX`
