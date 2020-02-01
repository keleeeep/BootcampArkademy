function printSquare(n) {
    let s = "";
    if (typeof n == 'number') {
        for (let i = 1; i <= n; i++) {
            for (let j = 1; j <= n; j++) {
                if (i == 1 || i == n || j == 1 || j == n) {
                    s += ' *';
                } else {
                    s += '  ';
                }
            }
            s += '\n'
        }
    } else {
        console.log('Parameter harus angka')
    }
    console.log(s);
}

printSquare(5);
