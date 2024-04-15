class Solution:
    def strStr(self, haystack, needle):
        if needle in haystack:
            return haystack.index(needle)
        else:
            return -1

solution = Solution()
result = solution.strStr('sadbutsad', 'sad')
print(result)


