import React from 'react'
import { FontAwesomeIcon } from '@fortawesome/react-fontawesome';
import { faFacebook } from '@fortawesome/free-brands-svg-icons';
import { faTwitter } from '@fortawesome/free-brands-svg-icons'; 
import { faLinkedin } from '@fortawesome/free-brands-svg-icons'; 

export const BoddyComponente = (props) => {
  return (
    <div className='has-background-info-dark'>
      <div className="grid has-background-info-light">
        <div className="cell is-col-span-12 is-row-span-2"></div>
      </div>
      <div className="grid">
        <div className=" has-1-cols"> </div>
        <div className="cell is-col-span-2">
          <div className="card card-home">
            <div className="media-content orbitron-font">
              <h2 className="title is-2">Aprende YA !!!</h2>
              <h5 className="subtitle is-5">por @jorgedipra</h5>
            </div>
            <div className="card-image">
              <figure className="image is-4by3">
                <img className='img-logoB' src={props.logo} alt="Logo" />
              </figure>
              <div className="fixed-grid has-1-cols">
                <div className="grid is-centered custom-center">
                  <div className="cell is-col-span-1 ">
                    <button className="button is-link">
                      <FontAwesomeIcon  icon={faFacebook} />
                      &nbsp;Facebook
                    </button>
                  </div>
                  <div className="cell is-col-span-6 ">
                  <button className="button is-info">
                      <FontAwesomeIcon icon={faTwitter} />
                      &nbsp;Twitter
                    </button>
                  </div>
                  <div className="cell is-col-span-12">
                  <button className="button is-info is-dark ">
                      <FontAwesomeIcon icon={faLinkedin} />
                      &nbsp;Linkedin
                    </button>
                  </div>
                  <div className="cell is-col-span-12"></div>
                </div>
              </div>
            </div>


          </div>
        </div>
        <div className="cell cell is-col-span-3">
          <div className="ContainerCenter">
            <input type="radio" name="Carrusel" id="Slider1" defaultChecked />
            <input type="radio" name="Carrusel" id="Slider2" />
            <input type="radio" name="Carrusel" id="Slider3" />
            <div className="Carrusels">
              <div className="Carrusel Carr-img" style={{ backgroundImage: `url(https://github.com/jorgedipra/bookpro-v/blob/master/old/images/jflow-sample-slide1.jpg?raw=true)` }}></div>
              <div className="Carrusel Carr-img" style={{ backgroundImage: `url(https://github.com/jorgedipra/bookpro-v/blob/master/old/images/jflow-sample-slide3.jpg?raw=true)` }}></div>
              <div className="Carrusel Carr-img" style={{ backgroundImage: `url(https://github.com/jorgedipra/bookpro-v/blob/master/old/images/jflow-sample-slide4.jpg?raw=true)` }}></div>

              <label htmlFor="Slider3" className="ArrowLeft Arrow1">❮</label>
              <label htmlFor="Slider1" className="ArrowLeft Arrow2">❮</label>
              <label htmlFor="Slider2" className="ArrowLeft Arrow3">❮</label>

              <label htmlFor="Slider2" className="ArrowRight Arrow1">❯</label>
              <label htmlFor="Slider3" className="ArrowRight Arrow2">❯</label>
              <label htmlFor="Slider1" className="ArrowRight Arrow3">❯</label>
            </div>

            <div className="Selectors">
              <label htmlFor="Slider1" className="Selector"></label>
              <label htmlFor="Slider2" className="Selector"></label>
              <label htmlFor="Slider3" className="Selector"></label>
            </div>
          </div>
        </div>
        <div className="cell"> </div>
      </div>
    </div>

  )
}
