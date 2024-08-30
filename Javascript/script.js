function arrayMerge(array1, array2) {
  let n1 = array1.length;
  let n2 = array2.length;
  let array3 = [];
  let i = 0;
  let j = 0;
  while (i < n1 && j < n2) {
    if (array1[i] > array2[j]) {
      array3.push(array2[j]);
      j++;
    } else {
      array3.push(array1[i]);
      i++;
    }
  }
  while (i < n1) {
    array3.push(array1[i]);
    i++;
  }
  while (j < n2) {
    array3.push(array2[j]);
    j++;
  }
  return array3;
}
let array1 = [0, 1, 17, 3, 4, 6, 8, 9, 10];
let array2 = [6, 4, 7, 1, 7, 8, 9];
console.log(arrayMerge(array1, array2));
console.log('-------------------------------------');

let arrSort = [1, 3, 5, 7, 34, 2, 8, 4, 6, 9];
function sort(arr) {
  let n = arr.length;
  for (let i = 0; i < n - 1; i++) {
    for (let j = 0; j < n - i - 1; j++) {
      if (arr[j] > arr[j + 1]) {
        let temp = arr[j];
        arr[j] = arr[j + 1];
        arr[j + 1] = temp;
      }
    }
  }
  return arr;
}
console.log(sort(arrSort));
console.log('-------------------------------------');

let repeatingArray = [1, 3, 5, 7, 34, 2, 5, 8, 3, 1, 4, 6, 8, 9, 3, 1, 5, 9];
function removeDuplicates(arr) {
  let n = arr.length;
  let uniqueArray = [];
  for (let i = 0; i < n; i++) {
    if (uniqueArray.indexOf(arr[i]) === -1) {
      uniqueArray.push(arr[i]);
    }
  }
  return uniqueArray;
}
console.log(removeDuplicates(repeatingArray));
console.log('-------------------------------------');

let repeatingCount = [1, 3, 5, 7, 34, 2, 5, 8, 3, 1, 4, 6, 8, 9, 3, 1, 5, 9];
function countDuplicate(arr) {
  let n = arr.length;
  let count = 0;
  for (let i = 0; i < n; i++) {
    for (let j = i + 1; j < n; j++) {
      if (arr[i] === arr[j]) {
        count++;
        break;
      }
    }
  }
  return count;
}
console.log(countDuplicate(repeatingCount));
console.log('-------------------------------------');

let repeatingval = [1, 3, 5, 7, 34, 2, 5, 8, 3, 1, 4, 6, 8, 9, 3, 1, 5, 9];
function countDuplicateValues(arr, type) {
  let n = arr.length;
  let newObj = {};
  for (let i = 0; i < n; i++) {
    let item = arr[i]
    if (newObj[item]) {
      newObj[item] += 1;
    } else {
      newObj[item] = 1;
    }
  }
  if (type == 'count') {
    return newObj;
  } else if (type == 'unique') {
    return Object.keys(newObj);
  } else if (type == 'integer') {
    return Object.keys(newObj).map((v) => +v);
  }
}
console.log(countDuplicateValues(repeatingval, "count"));
console.log(countDuplicateValues(repeatingval, "unique"));
console.log(countDuplicateValues(repeatingval, "integer"));
console.log('-------------------------------------');

const nestedArray = [1, [2, 3], 4, [5, [6, 7]]]
function flatArray(arr) {
  let newArr = [];
  arr.forEach((item) => {
    if (Array.isArray(item)) {
      newArr = newArr.concat(flatArray(item));
    } else {
      newArr.push(item);
    }
  })
  return newArr;
}

console.log(flatArray(nestedArray))
console.log('-------------------------------------');

const obj = {
  obj1: {
    obj2: {
      obj3: {
        "name": "Hellworld"
      }
    }
  }
}
function findLeafNode(obj) {
  for (let key in obj) {
    if (typeof obj[key] === 'object') {
      return findLeafNode(obj[key]);
    } else {
      return obj[key];
    }
  }
}
// console.log(obj.obj1.obj2.obj3.name);
console.log(findLeafNode(obj));
console.log('-------------------------------------');

function curry(a) {
  return function(b) {
    return function(c) {
      return a + b + c;
    }
  }
}
console.log(curry(1)(2)(3));
console.log('-------------------------------------');

let a = "I am Indian";
function reverseSentence(sentence) {
  let words = sentence.split(" ");
  let n = words.length - 1;
  let reversedSentence = "";
  for (let i = n; i >= 0; i--) {
    reversedSentence += words[i] + " ";
  }
  return reversedSentence;
}
console.log(reverseSentence(a));
console.log('-------------------------------------');

let nums = [2, 7, 11, 15];
let target = 26;

function matchTarget(nums, target) {
  let n = nums.length - 1;
  let i = 0;

  while (i < n) {
    if (nums[i] + nums[n] > target) {
      n--;
    } else if (nums[i] + nums[n] < target) {
      i++;
    } else if (nums[i] + nums[n] === target) {
      return `${nums[i]} and ${nums[n]}`;
    }
  }
  return "No such pair found";
}
console.log(matchTarget(nums, target));
console.log('-------------------------------------');

let mat = [
  [1, 2, 3],
  [4, 5, 6],
  [7, 8, 9],
];

function diagonalSum(matrix) {
  const matrixLength = matrix.length;
  let sum = 0;
  for (let i = 0; i < matrixLength; i++) {
    const len = matrix[i].length;
    for (let j = 0; j < len; j++) {
      if (i == j || i + j === len - 1) {
        sum = sum + matrix[i][j];
      }
    }
  }
  return sum;
}
console.log(diagonalSum(mat));
console.log('-------------------------------------');

function longestSubstring(str) {
  let result = [];
  let temp = [];
  const len = str.length;
  for (let i = 0; i < len; i++) {
    if (!temp.includes(str[i])) {
      temp.push(str[i]);
    } else {
      temp = [str[i]];
    }
    if (temp.length >= result.length) {
      result = temp;
    }
  }
  return result.join("");
}
console.log(longestSubstring("ababcdabc"));
console.log('-------------------------------------');

function string_endsWith(input, key) {
  if (input && key) {
    let i = input.length - 1;
    let j = key.length - 1;

    while (i >= 0 && j >= 0) {
      if (input[i] !== key[j]) {
        return "not matched";
      }
      i--;
      j--;
    }
  }
  return "matched";
}

console.log(string_endsWith("shobhit sharma", "sharma"));
console.log('-------------------------------------');

function removeAdjacentCharacters(input) {
  let output = [];
  for (let i = 0; i < input.length; i++) {
    if (input[i] != input[i + 1]) {
      output.push(input[i]);
    } else {
      i++;
    }
  }
  if (input.length === output.length) {
    return output;
  }
  return removeAdjacentCharacters(output);
}
console.log(removeAdjacentCharacters("ABCCBCBA"));
console.log('-------------------------------------');

function strWithCount(str) {
  let n = str.length;
  let output = {};
  for (let i = 0; i < n; i++) {
    if (str[i] != ' ') {
      output[str[i]] = output[str[i]] ? output[str[i]] + 1 : 1;
    }
  }
  console.log(output);
  let nstr = "";
  for (let k in output) {
    nstr += k + output[k];
  }
  return nstr;
}
console.log(strWithCount("A BC C BCBA"));
console.log('-------------------------------------');

function test(str) {
  let n = str.length;
  let output = {};
  for (let i = 0; i < n; i++) {
    if (['a', 'e', 'i', 'o', 'u'].includes(str[i])) {
      output[str[i]] = output[str[i]] ? output[str[i]] + 1 : 1
    }
  }
  return output;
  // let nstr = "";
  // for (let k in output) {
  //   nstr += k + output[k]
  // }
  // return nstr;
}
let string = "Quinton de Kock, KL Rahul (c & wk), Marcus Stoinis, Deepak Hooda, Nicholas Pooran, Ayush Badoni, Krunal Pandya, Matt Henry, Ravi Bishnoi, Mohsin Khan, Yash ThakurBenchAmit Mishra, Arshin Kulkarni, Krishnappa Gowtham, Manimaran Siddharth, Yudhvir Singh Charak, Devdutt Padikkal, Arshad Khan, Prerak Mankad, Kyle Mayers, Shamar Joseph, Ashton Turner, Naveen-ul-Haq, Mayank Yadav"
console.log(test(string.toLowerCase()));
console.log('-------------------------------------');

// METHOD 1
let num = 41;
function prime(num) {
  if (num > 1) {
    for (let i = 2; i <= Math.sqrt(num); i++) {
      if (num % i == 0) {
        return `${num} not a prime number`;
      }
    }
    return `${num} is a prime number`;
  }
  return `${num} not a prime number`;
}
console.log(prime(num))

// METHOD 2
function primeRe(num, d) {
  if (num > 1) {
    if (num === d) {
      return `${num} is a prime number...`;
    }
    if (num % d === 0) {
      return `${num} not a prime number...`;
    }
    return primeRe(num, d + 1)
  }
  return `${num} not a prime number...`;
}
console.log(primeRe(num, 2))
console.log('-------------------------------------');


let minMax = [12, 25, 3655, 7, 15, 48, 78, 68, 232, 2, 555];
// Max
function max(minMax) {
  let max = 0;
  for (let i = 0; i < minMax.length; i++) {
    if (minMax[i] > max) {
      max = minMax[i];
    }
  }
  return max + " is max value in the given array."
}
console.log(max(minMax))

// Min
function min(minMax) {
  let min = 10000000;
  for (let i = 0; i < minMax.length; i++) {
    if (minMax[i] < min) {
      min = minMax[i];
    }
  }
  return min + " is min value in the given array."
}
console.log(min(minMax))

// Max
function secMax(minMax) {
  let max = 0
  let secMax = max;
  for (let i = 0; i < minMax.length; i++) {
    if (minMax[i] > max) {
      secMax = max;
      max = minMax[i];
    }else if(minMax[i]>secMax && minMax[i] != max){
      secMax = minMax[i];
    }
  }
  return secMax + " is second max value in the given array."
}
console.log(secMax(minMax))
console.log('-------------------------------------');

let b = "hello world peter parker"
function caps(str) {
  let c = str.split(" ")
  let d = ""
  for (let i = 0; i < c.length; i++) {
    let n = c[i].charAt(0).toUpperCase();
    let m = c[i].slice(1);
    d += `${n}${m} `
  }
  return d
}
console.log(caps(b))
console.log('-------------------------------------');

let poly = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];
Array.prototype.myMap = function(cb) {
  let result = []
  for (let i = 0; i < this.length; i++) {
    result.push(cb(this[i], i, this))
  }
  return result
}
const re = poly.myMap((item, i, poly) => item * 7)
console.log(re)
console.log('-------------------------------------');


let polRed = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];
Array.prototype.myReduce = function(cb, init) {
  let result = init
  for (let i = 0; i < this.length; i++) {
    result = cb(result, this[i])
  }
  return result
}
const re1 = polRed.myReduce((acc, i) => acc + i, 0)
console.log(re1)
console.log('-------------------------------------');

