import React from 'react'
import ReactDOM from 'react-dom'
import axios from 'axios';
import Search from './components/Search'
import Result from './components/Result'
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes React and other helpers. It's a great starting point while
 * building robust, powerful web applications using React + Laravel.
 */

require('./bootstrap');

/**
 * Next, we will create a fresh React component instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

class App extends React.Component {
  constructor(props){
    super(props)
    this.state = {
      inputValue: '',
      cryptos: []
    }
  }
  componentDidMount(){
    axios.get('/amp_orm/')
      .then(res => {
        const cryptos = res.data;
        this.setState({cryptos})
      })
  }
  handleChange(e){
    this.setState({
      inputValue: e.target.value
    })
  }
  handleSubmit(e){
    console.log(e)
    console.log(e.value)
    console.log(e.target.value)
    e.preventDefault();
  }
  render() {
    return(
      <section>
        <Search
          onChange={(e) => this.handleChange(e)}
          onSubmit={(e) => this.handleSubmit(e)}
          value={this.inputValue}/>
        <Result cryptos={this.state.cryptos}/>
      </section>
    )
  }
}

if (document.getElementById('app')) {
  ReactDOM.render(<App />, document.getElementById('app'));
}