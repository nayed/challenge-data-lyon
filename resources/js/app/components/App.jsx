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
        searchResults.push(response.results)
        
        this.setState({searchResults: searchResults})
    }

    search(URL) {
        $.ajax({
            type: "GET",
            dataType: 'jsonp',
            url: URL,
            success: function(response) {
                console.log(this)
                this.showResults(response)
            }.bind(this),
            error: function(xhr, status, err) {
                console.error(status, err)
            }.bind(this)
        })
    }

    /*componentDidMount() {
        //this.search('https://itunes.apple.com/search?term=fun')
    }*/
    
    render() {
        
        return (
            <div>
                <SearchBox search={this.search.bind(this)} />
                <Results searchResults={this.state.searchResults} />
            </div>
        )
    }
}
