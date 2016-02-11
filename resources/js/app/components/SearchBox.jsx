import React from 'react'
import ReactDOM from 'react-dom'
import $ from 'jquery'
import Autosuggest from 'react-autosuggest'
import languages from './language'

function getSuggestions(value) {
  const inputValue = value.trim().toLowerCase()
  const inputLength = inputValue.length

  return inputLength === 0 ? [] : languages.filter(lang =>
    lang.name.toLowerCase().slice(0, inputLength) === inputValue
  )
}

function getSuggestionValue(suggestion) { // when suggestion selected, this function tells
  return suggestion.name                 // what should be the value of the input
}

function renderSuggestion(suggestion) {
  return (
    <span>{suggestion.name}</span>
  )
}





export default class SearchBox extends React.Component {
    constructor() {
        super()
        this.state = {
          value: '',
          suggestions: getSuggestions('')
        }

        this.onChange = this.onChange.bind(this);
        this.onSuggestionsUpdateRequested = this.onSuggestionsUpdateRequested.bind(this);
    }

    /*searchMarket() {
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
    }*/

     onChange(event, { newValue }) {
        this.setState({
          value: newValue
        })
      }

      onSuggestionsUpdateRequested({ value }) {
        this.setState({
          suggestions: getSuggestions(value)
        })
      }

    render() {
<<<<<<< HEAD

=======
    const { value, suggestions } = this.state;
    const inputProps = {
      placeholder: 'Type a programming language',
      value,
      onChange: this.onChange
    }

    return (
      <Autosuggest suggestions={suggestions}
                   onSuggestionsUpdateRequested={this.onSuggestionsUpdateRequested}
                   getSuggestionValue={getSuggestionValue}
                   renderSuggestion={renderSuggestion}
                   inputProps={inputProps} />
    )
  }
}

/*
render() {
        console.log(language)
>>>>>>> master
        return (
            <div className="app__wrapper">
                <div id="map"></div>
                <section className="header">
                    <div className="header__logo">
                        <i className="fa fa-shopping-basket"></i>
                        <h1><b>my</b>Market</h1>
                    </div>
                </section>
                <section className="search">
                    <div className="search__wrapper">
                        <div className="search__bar">
                            <input type="text" className="search__input" placeholder="Recherche à proximité de ..." onkeyup="RecupChangementVille(this.value)"></input>
                            <button className="search__button search__button--close"><i className="fa fa-times"></i>
                            </button>
                        </div>
                        <ul className="search__list">
                            <li className="search__item search__item--prox"><i className="fa fa-dot-circle-o"></i>
                                Ma position actuelle
                            </li>
                            <li className="search__item" data-checked="true">Lyon</li>
                            <li className="search__item">Chassieu</li>
                            <li className="search__item">Villeurbanne</li>
                            <li className="search__item">Mâcon</li>
                            <li className="search__item">Vaulx-en-Velin</li>
                        </ul>
                    </div>
                </section>
                <section className="days">
                    <ul className="days__list">
                        <li className="days__item" data-value="lundi" id="jour_1" value="1" data-checked="false" onClick={this.test()}>Lun</li>
                        <li className="days__item" data-value="mardi" id="jour_2" value="2" data-checked="false">Mar</li>
                        <li className="days__item" data-value="mercredi" id="jour_3" value="3" data-checked="false">Mer</li>
                        <li className="days__item" data-value="jeudi" id="jour_4" value="4" data-checked="false">Jeu</li>
                        <li className="days__item" data-value="vendredi" id="jour_5" value="5" data-checked="false">Ven</li>
                        <li className="days__item" data-value="samedi" id="jour_6" value="6" data-checked="false">Sam</li>
                        <li className="days__item" data-value="dimanche" id="jour_7" value="7" data-checked="false">Dim</li>
                    </ul>
                </section>
                <div id="malongitude"></div>
                <div id="malatitude"></div>

                <script>

                </script>

            </div>
<<<<<<< HEAD
        )       
    }

    test(){

        console.log("test");

    }

  }
=======
        )
    }*/
>>>>>>> master
