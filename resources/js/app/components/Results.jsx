import React from 'react'
import ResultItem from './ResultItem'

export default class Results extends React.Component {
    render() {
        let resultItems = this.props.searchResults.map(results => {
            return results.map(result => {
                return <ResultItem key={result.trackId} trackName={result.trackName} />
            })
        })
        
        return (
            <ul>
                
            </ul>
        )
    }
}
