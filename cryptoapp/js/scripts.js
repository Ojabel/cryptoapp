// TODAY'S DATE

let date = new Date().toLocaleDateString('en-GB', {
  weekday: 'long',
  year: 'numeric',
  month: 'long',
  day: 'numeric',
});

document.getElementById('date').innerHTML = date;



// CRYPTOCURRENCY TABLE

const cryptoDiv = document.getElementById('crypto');
let tableHeaders = [
  'ID',
  'Image',
  'Name',
  'Symbol',
  'Price',
  '24h',
  'Volume',
  'Market Cap',
];

const createCryptoTable = () => {
  while (cryptoDiv.firstChild) {
    cryptoDiv.removeChild(cryptoDiv.firstChild);
  }

  let cryptoTable = document.createElement('table');
  cryptoTable.classList.add(
    'table',
    'table-dark',
    'table-hover',
    'border-light',
    'cryptoTable'
  );

  let cryptoTableHead = document.createElement('thead');
  cryptoTableHead.className = 'cryptoTableHead';


  let cryptoTableHeaderRow = document.createElement('tr');
  cryptoTableHeaderRow.className = 'cryptoTableHeaderRow';

  tableHeaders.forEach((header) => {
    let cryptoHeader = document.createElement('th');
    cryptoHeader.innerHTML = header;
    cryptoTableHeaderRow.append(cryptoHeader);
  });

  cryptoTableHead.append(cryptoTableHeaderRow);
  cryptoTable.append(cryptoTableHead);

  let cryptoTableBody = document.createElement('tbody');

  cryptoTableBody.className = 'cryptoTableBody';
  cryptoTable.append(cryptoTableBody);
  cryptoDiv.append(cryptoTable);
};

const appendCrypto = (singleCoin, singleCoinID) => {
  const cryptoTable = document.querySelector('.cryptoTableBody');
  let cryptoTableBodyRow = document.createElement('tr');
  cryptoTableBodyRow.className = 'cryptoTableBodyRow';

  let coinID = document.createElement('td');
  coinID.style.paddingLeft='50px';
  coinID.style.paddingBottom='30px';
  coinID.innerHTML = singleCoinID;

  let coinImage = document.createElement('td');
  coinImage.style.paddingLeft='50px';
  coinID.style.paddingBottom='30px';
  let image = document.createElement('img');
  image.src = singleCoin.image;
  image.setAttribute('height', '30px');
  image.setAttribute('width', '30px');
  coinImage.appendChild(image);

  let coinName = document.createElement('td');
  coinName.style.paddingLeft='80px';
  coinName.style.paddingBottom='30px';
  coinName.innerHTML = singleCoin.name;

  let coinSymbol = document.createElement('td');
  coinSymbol.innerHTML = singleCoin.symbol;

  let coinCurrentPrice = document.createElement('td');
  coinCurrentPrice.style.paddingLeft='50px';
  coinCurrentPrice.style.paddingBottom='30px';
  coinCurrentPrice.innerHTML = '$' + singleCoin.current_price.toFixed(2);

  let coin24h = document.createElement('td');
  coin24h.style.paddingLeft='50px';
  coin24h.style.paddingBottom='30px';
  coin24h.innerHTML = singleCoin.price_change_percentage_24h.toFixed(2) + '%';
  coin24h.style.color =
    singleCoin.price_change_percentage_24h > 0 ? '#2e7d32' : '#d50000';

  let coinVolume = document.createElement('td');
  coinVolume.style.paddingLeft='60px';
  coinVolume.style.paddingBottom='30px';
  coinVolume.innerHTML = '$' + singleCoin.total_volume.toLocaleString();

  let coinMarketCap = document.createElement('td');
  coinMarketCap.style.paddingBottom='30px';
  coinMarketCap.innerHTML = '$' + singleCoin.market_cap.toLocaleString();

  cryptoTableBodyRow.append(
    coinID,
    coinImage,
    coinName,
    coinSymbol,
    coinCurrentPrice,
    coin24h,
    coinVolume,
    coinMarketCap
  );

  cryptoTable.append(cryptoTableBodyRow);
};

const getCrypto = async () => {
  await fetch(
    'https://api.coingecko.com/api/v3/coins/markets?vs_currency=USD&order=market_cap_desc&per_page=5&page=1&sparkline=false',
    {
      method: 'GET',
      mode: 'cors',
      headers: {
        'Content-Type': 'application/json',
        'Access-Control-Allow-Origin': '*',
        'Access-Control-Allow-Methods': 'GET, POST, PUT, DELETE',
      },
    }
  )
    .then((response) => response.json())
    .then((coins) => {
      console.log('Crypto Data:', coins);
      createCryptoTable();
      for (const coin of coins) {
        let coinID = coins.indexOf(coin) + 1;
        appendCrypto(coin, coinID);
      }
    })
    .catch((error) => {
      console.error('Error:', error);
    });
};

getCrypto();
