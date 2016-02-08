import React from 'react'
import ReactDOM from 'react-dom'

export default class SearchBox extends React.Component {
    createAjax() {
        let query = ReactDOM.findDOMNode(this.refs.query).value
        let category = ReactDOM.findDOMNode(this.refs.category).value
        let URL = `https://itunes.apple.com/search?term=${query}&country=us&entity=${category}`
        this.props.search(URL)
        console.log(URL)
    }

    render() {
        return (
            <div>
                <input type="text" ref="query" />
                <select ref="category">
                    <option value="software">Apps</option>
                    <option value="movie">Films</option>
                </select>
                <input type="submit" onClick={this.createAjax.bind(this)} />
            </div>
        )
    }
}
