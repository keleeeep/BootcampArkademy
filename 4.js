function substituteVowels(str, a) {

    var vowels = 'aeiouAEIOU';
    var splitStr = str.split('');
    var arrStr = [];
    for (var i = 0; i < vowels.length; i += 1) {
        if (str.indexOf(vowels[i]) === -1) {
            return 'tidak ada huruf vokal';
        } else {
            for (var i = 0; i < splitStr.length; i++) {

                if (vowels.indexOf(splitStr[i]) === -1) {
                    arrStr.push(splitStr[i]);
                }
                
                else {
                    arrStr.push(a)
                    
                }
            }
            return arrStr.join('');
        }
    }
}

substituteVowels("Orang jahat adalah orang baik yang tersakiti", "i");
substituteVowels("try fly fry cry", "x");