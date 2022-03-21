import ExampleReactComponent from './scripts/ExampleReactComponent'
import React from 'react'
import ReactDOM from 'react-dom'

// Add if() around render() to stop error and loading unused elements
if(document.querySelector('#render-react-example-here')) {
    ReactDOM.render(<ExampleReactComponent msg="Hello World" />, document.querySelector("#render-react-example-here"))
}