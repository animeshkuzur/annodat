import requests
from bs4 import BeautifulSoup
import sys

def query(query):

	url = "http://www.amazon.in/s/ref=nb_sb_noss?url=search-alias%3Daps&field-keywords="
	for x in query:
		url = url+x+"+"
	url=url[0:-1]
	return url

def getproductid(url):
	pid=""
	try:
		response_code = requests.get(url)
		#print response_code.status_code
		if response_code.status_code == 200:
			html = response_code.text
			tags = BeautifulSoup(html,"html.parser")
			hs = tags.find('li',attrs={'id':"result_0"})
			pid = hs['data-asin']
		else:
			pid=""			
	except requests.ConnectionError:
		pid=""
	finally:
		return pid

def getreviews(pidt):
	try:
		rurl = "http://www.amazon.in/product-reviews/"+pidt+"/ref=cm_cr_dp_see_all_btm?ie=UTF8&reviewerType=all_reviews&showViewpoints=1&sortBy=recent"
		response_code = requests.get(rurl)
		html = response_code.text
		tags = BeautifulSoup(html,"html.parser")
		#tag = BeautifulSoup(html,"html.parser")
		pro_name = tags.find('a',attrs={'data-hook':"product-link"})
		print pro_name.text
		for hs in tags.findAll('a',attrs={'class':"a-size-base a-link-normal see-all"}):
			text = hs.text
			txt = text.split(" ")
			print txt[2]
	except requests.ConnectionError:
		return 0
	finally:
		return 0
id_next=1
id_from=0
crawled=set()
q = sys.argv[1:]
l_q = len(q)
url = query(sys.argv[1:])
#print url
pidt=getproductid(url)
#print pidt
x=getreviews(pidt)