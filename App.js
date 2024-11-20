
const heading = React.createElement("h1",{id:"heading",key:"heading",xyz:"abc"},"This is a react heading")
const sibling = React.createElement("p",{id:"sibling",key:"sibling"},"I am sibling")
const parent = React.createElement("div",{id:"main"},[heading,sibling])
console.log(parent);
//OUTPUT : // {
//     "type": "h1",
//     "key": null,
//     "ref": null,
//     "props": {
//         "id": "heading",
//         "xyz": "abc",
//         "children": "This is a react heading"
//     },
//     "_owner": null,
//     "_store": {}
// }
// props are attributes + childrens inside that react element
const root = ReactDOM.createRoot(document.getElementById("root"))
root.render(parent)


// to prevent this complex thing of `React.createElement` we use `JSX`