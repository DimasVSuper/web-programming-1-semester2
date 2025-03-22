import './style.css'
import { date } from './components/date.js'

document.querySelector('#app').innerHTML = `
 ${date()}
`

document.getElementById('show-date-btn').addEventListener('click', () => {
    const dateDisplay = document.getElementById('date-display');
    dateDisplay.textContent = date();
});


