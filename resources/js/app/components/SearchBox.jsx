import React from 'react'
import ReactDOM from 'react-dom'
import Autosuggest from 'react-autosuggest'

export default class SearchBox extends React.Component {
    searchMarket() {
        let markets = this.props.search
        let city = ReactDOM.findDOMNode(this.refs.city).value
        let geometry = markets.map(market => {
            return market.map(m => {
                return m.geometry.coordinates
            })
        })
        let properties = markets.map(market => {
            return market.map(m => {
                return m.properties
            })
        })
        console.log(geometry, properties)
    }

    render() {
        //console.log(this.props.search)
        return (
            <div>
                <input type="text" ref="city" />
                
                <input type="submit" onClick={this.searchMarket.bind(this)} />
            </div>
        )
    }
}
