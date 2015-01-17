# Gets JSON using Bandcamp, used in seed file to populate the database

class PopulateData
  require 'json'
  require 'open-uri'
  require 'date'
  require 'time'

  # Get all albums currently on Bandcamp. Gets music from the Keats Collective!
  def self.albums
    albumContent = JSON.parse open("http://api.bandcamp.com/api/band/3/discography?key=#{BANDCAMP_API_KEY}&band_id=749584242").read
    albumContent['discography'].each do |album|
      Album.create(
        album_id: album['album_id'],
        release_date: album['release_date'],
        small_art_url: album['small_art_url'],
        large_art_url: album['large_art_url'],
        url: album['url'],
        title: album['title'],
        downloadable: album['downloadable'],
        artist: album['artist']
      )
    end
  end

  # Loop through all albums and get their tracks
  # This is where most of the API calls will be made
  def self.tracks
    Album.all.each do |album|
      trackContent = JSON.parse open("http://api.bandcamp.com/api/album/2/info?key=#{BANDCAMP_API_KEY}&album_id=#{album.album_id}").read
      trackContent['tracks'].each do |track|
        Track.create(
          number: track['number'],
          album_id: track['album_id'],
          track_id: track['track_id'],
          url: track['url'],
          streaming_url: track['streaming_url'],
          title: track['title'],
          duration: track['duration']
        )
      end
    end
  end

end
