import React, { useState } from "react"

const ExampleReactComponent = (props) => {
  const [clickCount, setClickCount] = useState(0)
  const { msg } = props;
  return (
    <div className="example-react-component" onClick={() => setClickCount(prev => prev + 1)}>
      <h1>Hello from React!</h1>
      <p>You have clicked on this component {clickCount} times.</p>
      <p>{ msg }</p>
    </div>
  )
}

export default ExampleReactComponent
