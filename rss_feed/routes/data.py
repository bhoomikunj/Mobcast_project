import requests
import pandas as pd

# URL of the RSS feed in JSON format
url = "https://timesofindia.indiatimes.com/rssfeeds/-2128838597.cms?feedtype=json"

# Fetch the data from the URL
response = requests.get(url)
data = response.json()

# Print out the structure of the JSON data to debug
print(data)

# Assuming the structure contains 'channel' and then 'item' for the articles
items = data.get('channel', {}).get('item', [])

# Define the columns for the data table
columns = ['title', 'link', 'pubDate', 'description']

# Create a list of dictionaries with the relevant data
data_list = [
    {col: item.get(col, None) for col in columns} for item in items
]

# Convert the list of dictionaries into a DataFrame
df = pd.DataFrame(data_list)

# Display the DataFrame
print(df)
