import React from 'react'


export const HeaderComponente = (props) => {
    return (
        <div>
            <nav className="navbar is-light" role="navigation" aria-label="main navigation">
            
            <div className="navbar-brand">
                <span id="nav-ini"></span>
            </div>
                <div className="navbar-brand">
                    <a className="navbar-item" href="https://github.com/jorgedipra/bookpro-v">
                    <img className='img-logo' src={props.logo} alt="Logo" />
                    <h1 className='orbitron-font'> Bookpro-v</h1>
                    </a>

                    <a role="button" className="navbar-burger" aria-label="menu" aria-expanded="false" data-target="navbarBasicExample" href='/'>
                        <span aria-hidden="true"></span>
                        <span aria-hidden="true"></span>
                        <span aria-hidden="true"></span>
                        <span aria-hidden="true"></span>
                    </a>
                </div>

                <div className="navbar-menu">
                   
                    <div className="navbar-end">
                        <div className="navbar-item">
                            <div className="buttons">
                                <a className="button is-success orbitron-font" href='/'>
                                    <strong>Nuevo</strong>
                                </a>
                                <a className="button is-dark orbitron-font" href='/'>
                                    Acceder
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </nav>
        </div>
    )
}
