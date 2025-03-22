export function date() {
    const d = new Date();
    
    const weekday = ["Sunday", "Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday"];
    const monthname = ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"];
    
    return `${weekday[d.getDay()]} ${d.getDate()}. ${monthname[d.getMonth()]} ${d.getFullYear()}`;
}
