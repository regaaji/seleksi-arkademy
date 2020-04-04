
	

const is_username_valid = (username) =>  /^[A-Z]{6,}$/.test(username);

console.log(is_username_valid('SABRINA'));
console.log(is_username_valid('KEVIN'));


const is_password_valid = (password) =>  /(?=.*[\d])(?=.*[A-Z])(?=.*[a-z])(?=.*[\W|_])(?=.*[#]).{9,15}$/.test(password);

console.log(is_password_valid('#DirumahAj4'));
console.log(is_password_valid('Cuci#Tangan'));

