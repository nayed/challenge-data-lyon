import React from 'react'
import ReactDOM from 'react-dom'
import $ from 'jquery'

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
            <div className="app__wrapper">
                <section className="map-container">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d89077.13001931181!2d4.835120949999999!3d45.7579555!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sfr!2sfr!4v1455092172025" width="100%" height="100%" frameBorder="0" style={{border:0}} allowFullScreen>
                    </iframe>
                </section>
                <section className="header">
                    <div className="header__logo">
                        <i className="fa fa-shopping-basket"></i>
                        <h1><b>my</b>Market</h1>
                    </div>
                </section>
                <section className="search">
                    <div className="search__wrapper">
                        <div className="search__bar">
                            <input type="text" className="search__input" placeholder="Recherche à proximité de ..."></input>
                            <button className="search__button search__button--close"><i className="fa fa-times"></i>
                            </button>
                        </div>
                        <ul className="search__list">
                            <li className="search__item search__item--prox"><i className="fa fa-dot-circle-o"></i>
                                Ma position actuelle
                            </li>
                            <li className="search__item">Lyon</li>
                            <li className="search__item">Chassieu</li>
                            <li className="search__item">Villeurbanne</li>
                            <li className="search__item">Mâcon</li>
                            <li className="search__item">vaux-en-velin</li>
                        </ul>
                    </div>
                </section>
                <section className="days">
                    <ul className="days__list">
                        <li className="days__item" data-value="lundi" data-checked="true">Lun</li>
                        <li className="days__item" data-value="mardi" data-checked="false">Mar</li>
                        <li className="days__item" data-value="mercredi" data-checked="true">Mer</li>
                        <li className="days__item" data-value="jeudi" data-checked="false">Jeu</li>
                        <li className="days__item" data-value="vendredi" ata-checked="false">Ven</li>
                        <li className="days__item" data-value="samedi" data-checked="false">Sam</li>
                        <li className="days__item" data-value="dimanche" data-checked="true">Dim</li>
                    </ul>
                </section>
                <script>

                </script>
            </div>
        )
    }
}
