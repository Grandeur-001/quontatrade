<!-- 
    DYNAMIC USERS WALLET SESSION 
    
    this will be included dynamically as the users  wallet for any page that needs to have the users wallet
-->



<style>
        :root {
            --background: #0f172a;
            --surface: #1e293b;
            --text-color: #ffffff;
            --secondary-text: #8b8ca7;
            --primary-dark: #4f46e5;
            --primary-color: #6366f1;
            --border-color: #2a2f3e;
            --hover-color: rgba(255, 255, 255, 0.05);
            --positive-color: #00c853;
            --negative-color: #ff0000;
            font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, sans-serif;

        }

        body {
            background-color: var(--background);
            color: var(--text-color);
        }
        .crypto-container {
            /* max-width: 1200px; */
            /* margin: 0 auto; */
        }

        .crypto-row {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 20px;
            border-bottom: 1px solid rgba(255, 255, 255, 0.1);
        }

        .crypto-left {
            display: flex;
            align-items: center;
            gap: 15px;
            flex: 1;
        }

        .crypto-icon {
            width: 35px;
            height: 35px;
            border-radius: 50%;
        }

        .crypto-info {
            display: flex;
            flex-direction: column;
            gap: 4px;
        }

        .crypto-name {
            font-size: 16px;
            font-weight: 500;
            color: var(--text-color);
        }

        .crypto-network {
            font-size: 14px;
            color: var(--secondary-text);
        }

        .crypto-right {
            display: flex;
            flex-direction: column;
            align-items: flex-end;
            gap: 4px;
        }

        .crypto-amount {
            font-size: 16px;
            color: var(--text-color);
        }

        .crypto-price {
            font-size: 14px;
            color: var(--secondary-text);
        }

        .crypto-change {
            font-size: 14px;
        }

        .crypto-change.positive {
            color: var(--positive-color);
        }

        .crypto-change.negative {
            color: var(--negative-color);
        }

        @media (max-width: 768px) {
            .crypto-row {
                padding: 15px;
            }

            .crypto-left {
                gap: 10px;
            }

            .crypto-icon {
                width: 28px;
                height: 28px;
            }

            .crypto-name {
                font-size: 14px;
            }

            .crypto-network {
                font-size: 12px;
            }

            .crypto-amount {
                font-size: 14px;
            }

            .crypto-price {
                font-size: 12px;
            }
        }
</style>
<div class="crypto-container" id="cryptoContainer"></div>
              
    <script>
        const cryptoData = [
            { id: 'bitcoin', symbol: 'BTC', network: 'BTC', icon: 'https://assets.coingecko.com/coins/images/1/small/bitcoin.png', staticAmount: '$2,912.00' },
            { id: 'tether', symbol: 'USDT', network: 'TRC20', icon: 'https://assets.coingecko.com/coins/images/325/small/Tether.png', staticAmount: '$19,088.00' },
            { id: 'ethereum', symbol: 'ETH', network: 'ERC20', icon: 'https://assets.coingecko.com/coins/images/279/small/ethereum.png', staticAmount: '$0.00' },
            { id: 'dogecoin', symbol: 'DOGE', network: 'DOGE', icon: 'https://assets.coingecko.com/coins/images/5/small/dogecoin.png', staticAmount: '$0.00' },
            { id: 'binancecoin', symbol: 'BNB', network: 'BNB-BSC', icon: 'https://assets.coingecko.com/coins/images/825/small/bnb-icon2_2x.png', staticAmount: '$0.00' },
            { id: 'shiba-inu', symbol: 'SHIB', network: 'ERC20', icon: 'https://assets.coingecko.com/coins/images/11939/small/shiba.png', staticAmount: '$0.00' },
            { id: 'litecoin', symbol: 'LTC', network: 'LTC', icon: 'https://assets.coingecko.com/coins/images/2/small/litecoin.png', staticAmount: '$0.00' },
            { id: 'ripple', symbol: 'XRP', network: 'TAG : 1927225453', icon: 'https://assets.coingecko.com/coins/images/44/small/xrp-symbol-white-128.png', staticAmount: '$0.00' },
            { id: 'tether', symbol: 'USDT', network: 'ERC20', icon: 'https://assets.coingecko.com/coins/images/325/small/Tether.png', staticAmount: '$0.00' }
        ];

        async function fetchCryptoPrices() {
            try {
                const ids = cryptoData.map(crypto => crypto.id).join(',');
                const response = await fetch(`https://api.coingecko.com/api/v3/simple/price?ids=${ids}&vs_currencies=usd&include_24h_change=true`);
                const data = await response.json();
                
                const container = document.getElementById('cryptoContainer');
                container.innerHTML = '';

                cryptoData.forEach(crypto => {
                    const priceData = data[crypto.id];
                    const change24h = priceData?.usd_24h_change || 0;
                    const changeFormatted = change24h.toFixed(1);
                    const price = priceData?.usd || 0;
                    const cryptoAmount = (parseFloat(crypto.staticAmount.replace('$', '').replace(',', '')) / price).toFixed(4);

                    const row = document.createElement('div');
                    row.className = 'crypto-row';
                    row.innerHTML = `
                        <div class="crypto-left">
                            <img src="${crypto.icon}" alt="${crypto.symbol}" class="crypto-icon">
                            <div class="crypto-info">
                                <div class="crypto-name">${crypto.symbol}</div>
                                <div class="crypto-network">${crypto.network}</div>
                            </div>
                        </div>
                        <div class="crypto-right">
                            <div class="crypto-amount">${cryptoAmount}</div>
                            <div class="crypto-price">${crypto.staticAmount}</div>
                            <div class="crypto-change ${change24h >= 0 ? 'positive' : 'negative'}">
                                ${changeFormatted > 0 ? '+' : ''}${changeFormatted}%
                            </div>
                        </div>
                    `;
                    container.appendChild(row);
                });
            } catch (error) {
                console.error('Error fetching crypto prices:', error);
            }
        }

        fetchCryptoPrices();

        setInterval(fetchCryptoPrices, 3000);
    </script>

</body>
</html>