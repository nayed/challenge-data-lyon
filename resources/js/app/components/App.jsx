import React from 'react'
import SearchBox from './SearchBox'
import Results from './Results'
import $ from 'jquery'

export default class App extends React.Component {
    constructor() {
        super()
        this.state = {
            searchResults: []
        }
    }

    showResults(response) {
        let searchResults = this.state.searchResults
        searchResults.push(response.features)
        //console.log(response)
        this.setState({searchResults: searchResults})
    }

    search(URL) {
        $.ajax({
            type: "GET",
            dataType: 'json',
            url: URL,
            success: function(response) {
                //console.log(response)
                this.showResults(response)
            }.bind(this),
            error: function(xhr, status, err) {
                console.error(status, err)
            }.bind(this)
        })
    }

    componentDidMount() {
        this.search('https://download.data.grandlyon.com/wfs/grandlyon?SERVICE=WFS&VERSION=2.0.0&outputformat=GEOJSON&request=GetFeature&typename=gin_nettoiement.ginmarche&SRSNAME=urn:ogc:def:crs:EPSG::4171')
    }

    render() {
        //console.log(this.state.searchResults)
        return (
            <SearchBox />
        )
    }
}
