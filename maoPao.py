#6, 3, 8, 2, 9, 1 这么一组数据，每次冒泡把最大的放到最后去，几轮之后就是按照从小到大排序了
#参考onedrive里的FireShot Capture 2 - php四排序-冒泡排序

arr = [6, 3, 8, 2, 9, 1]
num = len(arr)

for i in range(num - 1):#控制轮数
	l = i + 1
	for j in range(num - l):#控制每轮的比较次数
		#print(l, j)#l代表第几轮，j从0开始，用j与j+1进行比较
		if(arr[j + 1] < arr[j]):
			tmp = arr[j]
			arr[j] = arr[j + 1]
			arr[j + 1] = tmp

print(arr)
		