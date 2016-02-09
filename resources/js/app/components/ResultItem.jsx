import React from 'react'

export default class ResultItem extends React.Component {
    render() {
        return (
            <li>{this.props.trackName}</li>
        )
    }
}
