import logo from './img/logo151.png';
import './App.css';
import { BoddyComponente } from './components/BoddyComponente';
import { FooterComponente } from './components/FooterComponente';
import { HeaderComponente } from './components/HeaderComponente';
import 'bulma/css/bulma.min.css';


function App() {
  return (
    <div className="App">
      <HeaderComponente logo={logo} ></HeaderComponente>
      <BoddyComponente logo={logo} ></BoddyComponente>
      <header className="App-header"></header>
      <FooterComponente></FooterComponente>
    </div>
  );
}

export default App;
