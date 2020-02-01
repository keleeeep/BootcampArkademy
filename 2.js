function checkUsername(name) {
	let regex = /^[x]{1}[A-Z]{4,7}[x]{1}$/;
	if (regex.test(name)) {
		return "true";
	}else{
		return "false";
	}
}
console.log(checkUsername('xFATHURx'));
console.log(checkUsername('xRidhox'));


function password(pass) {
	let regex = /0-9a-z$-:-?{-~!"^_`\[\]][A-Z]{3}/
	if (regex.test(pass)) {
		return "Success";
	}else{
		return "age Wrong";
	}
} //  Masih Salah, belum solve

console.log(checkPassword('kick2XXX!'));
console.log(checkPassword('aV8V7V6?'));